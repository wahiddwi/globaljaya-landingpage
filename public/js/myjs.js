const currentLocation = location.href;
const menuItem = document.querySelectorAll('a');
const menuLenght = menuItem.length;
        for(Let i = 0; i < menuLenght; i++){
            if(menuItem[i].href === currentLocation){
                menuItem[i].className = "active"
            }
        }