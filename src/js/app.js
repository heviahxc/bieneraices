document.addEventListener('DOMContentLoaded', function(){

    eventListeners();
    darkMode();
});

function darkMode(){

    const preferDarkMode = window.matchMedia('(prefers-color-scheme: dark)');

    if(preferDarkMode.matches){
        document.body.classList.add('dark-mode')
    } else{
        document.body.classList.remove('dark-mode');
    }

    preferDarkMode.eventListeners('change', function(){
        if(preferDarkMode.matches){
            document.body.classList.add('dark-mode')
        } else{
            document.body.classList.remove('dark-mode');
        }
    });

    const buttonDarkMode = document.querySelector('.dark-mode-button');
    buttonDarkMode.addEventListener('click', function(){
        document.body.classList.toggle('dark-mode');
    });
}

function eventListeners(){
    const mobileMenu = document.querySelector('.mobile-menu');

    mobileMenu.addEventListener('click', navigatorResponsive);
}
function navigatorResponsive(){
    const navigation = document.querySelector('.navigation');

   
        navigation.classList.toggle('view') //if else
    }
