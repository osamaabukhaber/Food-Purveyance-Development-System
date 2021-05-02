/* start nav*/

var dropdownElementList = [].slice.call(document.querySelectorAll('.dropdown-toggle'));
var dropdownSubmenuElementList = [].slice.call(document.querySelectorAll('.dropdown-submenu-toggle'));
var dropdownMenus = [].slice.call(document.querySelectorAll('.dropdown-menu'));

var dropdownList = dropdownElementList.map(function (dropdownToggleEl) {
    return new bootstrap.Dropdown(dropdownToggleEl);
});

var submenuList = dropdownSubmenuElementList.map(function(e) {
    e.onclick = function(e){
        e.target.parentNode.querySelector('ul').classList.toggle('show');
        e.stopPropagation();
        e.preventDefault();
    }
});

var masterClickEvent = document.addEventListener('click',function(e){

    // Function to remove show class from dropdowns that are open
    closeAllSubmenus();

    // Hamburger menu
    if(e.target.classList.contains('hamburger-toggle')){
        e.target.children[0].classList.toggle('active');
    }

});

function closeAllSubmenus(){
    // Function to remove show class from dropdowns that are open
    dropdownMenus.map(function (menu) {
        menu.classList.remove('show');
    });
}

/* end nav */
