(function () {
  const toast = document.getElementById("app-toast");
  let toastTimer;

  function showToast(message) {
    if (!toast) return;
    toast.textContent = message;
    toast.classList.add("show");
    clearTimeout(toastTimer);
    toastTimer = setTimeout(() => toast.classList.remove("show"), 2200);
  }

  function readList(key) {
    try {
      return JSON.parse(localStorage.getItem(key) || "[]");
    } catch {
      return [];
    }
  }

  function writeList(key, value) {
    localStorage.setItem(key, JSON.stringify(value));
  }

  function addUnique(key, value) {
    const current = readList(key);
    if (!current.includes(value)) current.push(value);
    writeList(key, current);
    return current.length;
  }

  const handlers = {
    login: () => showToast("Открыта форма входа (демо-режим)."),
    "request-demo": () => showToast("Заявка на демо отправлена. Мы свяжемся с вами в течение 1 рабочего дня."),
    "start-investing": () => {
      showToast("Переход в каталог стартапов...");
      setTimeout(() => {
        window.location.href = "marketplace.html";
      }, 350);
    },
    "favorite-page": () => {
      addUnique("favorites", "Marketplace");
      showToast("Маркетплейс добавлен в избранное.");
    },
    invest: (button) => {
      const startup = button.dataset.startup || "Стартап";
      const total = addUnique("investments", startup);
      showToast(`Заявка на инвестицию в ${startup} отправлена. В портфеле: ${total}.`);
    },
    "open-notifications": () => {
      showToast("3 новых события: 2 обновления стартапов и 1 алерт по риску.");
    },
    "open-messages": () => {
      showToast("Открыт центр сообщений. Непрочитанных: 5.");
    }
  };

  document.querySelectorAll("button[data-action]").forEach((button) => {
    button.addEventListener("click", () => {
      const action = button.dataset.action;
      const handler = handlers[action];
      if (handler) {
        handler(button);
      } else {
        showToast("Действие для этой кнопки еще не настроено.");
      }
    });
  });
})();
