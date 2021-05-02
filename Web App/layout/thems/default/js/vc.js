var items = document.querySelectorAll('.code'),
    lastTabIndex = 4,
    backSpaceCode = 8;
items.forEach(function(item) {
  item.addEventListener('focus', function(e) {
    e.target.value = '';
  });
  item.addEventListener('keydown', function(e) {
    let keyCode = e.keyCode,
        currentTabIndex = e.target.tabIndex;
    if (keyCode !== backSpaceCode && currentTabIndex !== lastTabIndex) {
      document.querySelectorAll('.code').forEach(function(inpt) {
        if (inpt.tabIndex === currentTabIndex + 1) {
          setTimeout(function() {
            inpt.focus();
          }, 100);
        }
      });
    }
  });
});