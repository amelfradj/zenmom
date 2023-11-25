document.addEventListener('DOMContentLoaded', function() {
    // Sélectionnez l'élément h1
    var myT = document.getElementById('myT');

    // Ajoutez la classe 'anime' après un délai de 1 seconde
    setTimeout(function() {
        myT.classList.add('anime');
    }, 1000);
});


// document.addEventListener('DOMContentLoaded', function() {
//     // Sélectionnez toutes les images
//     var images = document.querySelectorAll('#galerie img');

//     // Définissez un délai initial
//     var delay = 1000;

//     // Appliquez l'animation à chaque image avec un délai différent
//     images.forEach(function(image) {
//         setTimeout(function() {
//             image.classList.remove('zen1');
//             image.classList.add('anime');
//         }, delay);

//         // Augmentez le délai pour la prochaine image
//         delay += 1000;
//     });
// });
