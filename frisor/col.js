var eqCols = () => {
    var cols = document.getElementsByClassName('cols');
    var col = document.getElementsByClassName('col');
    var height = 0;
    for (var i = 0; i < cols.length; i++) {
        cols[i].style.height = "auto";
    }
    for (var i = 0; i < cols.length; i++) {
        if (cols[i].clientHeight > height) {
            height = cols[i].clientHeight;
        }
    }
    for (var i = 0; i < cols.length; i++) {
        cols[i].style.height = height + "px";
    }

    for (var i = 0; i < col.length; i++) {
        col[i].style.height = "auto";
    }
    for (var i = 0; i < col.length; i++) {
        if (col[i].clientHeight > height) {
            height = col[i].clientHeight;
        }
    }
    for (var i = 0; i < col.length; i++) {
        col[i].style.height = height + "px";
    }
}
eqCols();
window.addEventListener("resize", eqCols, true);