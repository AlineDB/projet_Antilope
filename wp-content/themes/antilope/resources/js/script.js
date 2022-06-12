

/*ancre haut de page*/
document.addEventListener('DOMContentLoaded', function() {
    window.onscroll = function(ev) {
        document.getElementById("FixedNav").className = (window.pageYOffset > 100) ? "cVisible" : "cInvisible";
    };
});


/*reveal transition*/

/*
const ratio = .4;
const options = {
    root: null,
    rootMargin: '0px',
    threshold: ratio   //40% de l'élément visible il déclenche
}
const handleInterset = function (entries, observer) {
    entries.forEach(function (entry){ /!*boucle sur les entries et à chaque entry*!/
        if(entry.intersectionRatio > ratio){ /!*si entry a un ratio plus grand que le ratio défini*!/
            entry.target.classList.add('reveal-visible');
            observer.unobserve(entry.target); /!*arrete d'observer l'élément actuel*!/
        }
        if(entries.className === "reveal"){
            console.log("hello");
        }
    })
}
const observer = new IntersectionObserver(handleInterset, options);
document.querySelectorAll('.reveal').forEach(function (r){
    observer.observe(r); /!*boucle sur les éléments et observe ceux ci un à un*!/
});
console.log(document.querySelectorAll('.reveal'));
*/



/*transition pages*/



