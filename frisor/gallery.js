fetch('gal.php')
    .then((response) => {
        if (response.status == 200) {
            return response.json();
        } else {

        }
    })
    .then((json) => {
        var content = document.getElementsByClassName('gallery');
        for (var i = 0; i < json.images.length; i++) {
            content[0].innerHTML += "<div class='col-xs-12 col-sm-3'> <a href='#' class='thumbnail' data-toggle='modal' data-target='#lightbox'><img src='img/gal/" + json.images[i].name + "' alt='Billede til gallery' ></a></div>";
        }
    }).catch((error) => {
        console.log(error);
    });