// SIDEBAR
const menuItems = document.querySelectorAll(".left .sidebar .menu-item");
const notificationsPopup = document.querySelector(".left .notifications-popup");

// MESSAGES
const messageNotifications = document.querySelector("#message-notifications");
const messages = document.querySelector(".right .messages");
const message = document.querySelectorAll(".right .messages .message");
const messageSearch = document.querySelector(".right #message-search");

// THEME
const theme = document.querySelector(".left #theme");
const themeModal = document.querySelector(".modal");
const themeModalClose = document.querySelector(".modal-close");
const themeModalContainer = document.querySelector(".modal-container");

// FONTSIZES
const fontSizes = document.querySelectorAll(".modal-body .choose-size span");
var root = document.querySelector(":root");

// COLOR
const colorPalettes = document.querySelectorAll(".choose-color span");

// BACKGROUND
const bg1 = document.querySelector(".bg-1");
const bg2 = document.querySelector(".bg-2");
const bg3 = document.querySelector(".bg-3");


// add and remove active class from menu item in sidebar
const removeActiveItem = () => {
    menuItems.forEach(item => {
        item.classList.remove('active');
    })
}

menuItems.forEach(item => {
    item.addEventListener('click', () => {
        removeActiveItem();
        item.classList.add('active');
        if (item.id != 'notifications') {
            notificationsPopup.style.display = 'none';
        } else {
            notificationsPopup.style.display = 'block';
            document.querySelector('#notifications .notification-count').style.display = 'none';
        }
    })
})

// ========================= MESSAGES ===========================

// search chat
const searchMessage = () => {
    const val = messageSearch.value.toLowerCase();
    message.forEach(user => {
        let name = user.querySelector('h5').textContent.toLowerCase();
        if (name.indexOf(val) != -1) {
            user.style.display = 'flex';
        } else {
            user.style.display = 'none';
        }
    })
}

messageSearch.addEventListener('keyup', searchMessage);

// hightlight messages card when menu item messages is clicked 
messageNotifications.addEventListener('click', () => {
    messages.style.boxShadow = '0 0 1rem var(--color-primary)';
    messageNotifications.querySelector('.notification-count').style.display = 'none';
    setTimeout(() => {
        messages.style.boxShadow = 'none';
    }, 2000)
})

// ========================= THEMECUSTOMIZE ===========================
const openThemeModel = () => {
    themeModal.style.display = 'flex';
}

const closeThemeModel = () => {
    themeModal.style.display = 'none';
}

theme.addEventListener('click', openThemeModel);
themeModalClose.addEventListener('click', closeThemeModel);
themeModal.addEventListener('click', closeThemeModel);
themeModalContainer.addEventListener('click', (e) => {
    e.stopPropagation();
})

const removeSizeSelector = () => {
    fontSizes.forEach((size) => {
        size.classList.remove('active');
    })
}

// ============= FONTSIZE ===============
fontSizes.forEach((size) => {
    size.addEventListener('click', () => {
        removeSizeSelector();
        let fontSize;
        size.classList.toggle('active');

        if (size.classList.contains('font-size-1')) {
            fontSize = '0.75rem';
            root.style.setProperty('--sticky-top-left', '5.4rem');
            root.style.setProperty('--sticky-top-right', '5.4rem');
        } else if (size.classList.contains('font-size-2')) {
            fontSize = '0.813rem';
            root.style.setProperty('--sticky-top-left', '5.4rem');
            root.style.setProperty('--sticky-top-right', '-7rem');
        } else if (size.classList.contains('font-size-3')) {
            fontSize = '0.875rem';
            root.style.setProperty('--sticky-top-left', '-2rem');
            root.style.setProperty('--sticky-top-right', '-17rem');
        } else if (size.classList.contains('font-size-4')) {
            fontSize = '0.938rem';
            root.style.setProperty('--sticky-top-left', '-5rem');
            root.style.setProperty('--sticky-top-right', '-25rem');
        } else if (size.classList.contains('font-size-5')) {
            fontSize = '1rem';
            root.style.setProperty('--sticky-top-left', '-12rem');
            root.style.setProperty('--sticky-top-right', '-35rem');
        }

        // change font size of the root html element
        document.querySelector('html').style.fontSize = fontSize;
    })
})

// =========================== COLOR_PALETTES ===============================
const removeActiveColor = () => {
    colorPalettes.forEach((color) => {
        color.classList.remove('active');
    })
}

colorPalettes.forEach(color => {
    color.addEventListener('click', () => {
        removeActiveColor();
        let primary;
        color.classList.toggle('active');

        if (color.classList.contains('color-1')) {
            primaryHue = 252;
        } else if (color.classList.contains('color-2')) {
            primaryHue = 52;
        } else if (color.classList.contains('color-3')) {
            primaryHue = 352;
        } else if (color.classList.contains('color-4')) {
            primaryHue = 152;
        } else if (color.classList.contains('color-5')) {
            primaryHue = 202;
        }

        root.style.setProperty('--primary-color-hue', primaryHue);
    });
})

// =========================== BACKGROUND ===============================

// theme background values
let lightColorLightness;
let darkColorLightness;
let whiteColorLightness;

const changeBackground = () => {
    root.style.setProperty('--light-color-lightness', lightColorLightness);
    root.style.setProperty('--white-color-lightness', whiteColorLightness);
    root.style.setProperty('--dark-color-lightness', darkColorLightness);
}

bg1.addEventListener('click', () => {
    bg1.classList.add('active');
    bg2.classList.remove('active');
    bg3.classList.remove('active');
    window.location.reload();
});

bg2.addEventListener('click', () => {
    darkColorLightness = '95%';
    whiteColorLightness = '20%';
    lightColorLightness = '15%';

    bg2.classList.add('active');
    bg1.classList.remove('active');
    bg3.classList.remove('active');
    changeBackground();
});

bg3.addEventListener('click', () => {
    darkColorLightness = '95%';
    whiteColorLightness = '10%';
    lightColorLightness = '0%';

    bg3.classList.add('active');
    bg1.classList.remove('active');
    bg2.classList.remove('active');
    changeBackground();
});