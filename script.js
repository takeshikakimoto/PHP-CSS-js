window.addEventListener('load', function() {
    const $button = document.getElementById('main_button');
    const $modal = document.getElementsByClassName('modal');

    $button.addEventListener('click', function() {
        $modal[0].style.display="block";
    });

    $modal[0].addEventListener('click', function() {
        $modal[0].style.display="none";
    });

    const windowHeight = window.innerHeight;
    $modal[0].style.height = windowHeight + 'px';

});