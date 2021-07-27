'use strict';
/**
 * Definición del objeto enviado:
 *
 *{
 *     email: string,
 *     fbp: string,
 *     fbc: string, (optional)
 *     product: string, (product_name)
 *     category: string,
 *     event: string, (facebook event name)
 *     event_source_url: string,
 *     action_source: string
 *}
 */

let dev = false;
let contentViewSent = false;

const API_URL = 'https://api.mcoghlan.mx/event';

const GALLERY = [
    "galeria",
    "salas",
    "habitaciones",
    "comedores",
    "cocinas",
    "banos",
    "terrazas",
    "desayunadores",
    "ninos",
    "estudios",
    "bares",
    "vestibulos",
    "vestidores",
    "bibliotecas",
    "amenidades",
    "oficinas",
    "hoteles",
    "restaurantes",
    "accesorios"
]

const BRAND_TAGS = [
    "Interiorismo Residencial",
    "Diseño Comercial",
    "Proyecto Arquitectónico"
]

const PERSONAL_TAGS = [
    "Mariangel Coghlan, mi perspectiva"
]


let getParameterByName= function(name, url = window.location.href) {
    name = name.replace(/[\[\]]/g, '\\$&');
    let regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, ' '));
}

let getCookie = function(cname) {
    let name = cname + "=";
    let decodedCookie = decodeURIComponent(document.cookie);
    let ca = decodedCookie.split(';');
    for(var i = 0; i <ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

let get_timestamp = function (){
    return Math.floor(new Date() / 1000);
}

let get_fbc = function (){
    let fbc = getCookie('_fbc');
    if(fbc){
        let fbclid = getParameterByName('fbclid');
        if(fbclid){
            fbc = "fb.1." + get_timestamp() + fbclid;
        }
    }
    return fbc
}

let collectData = function (){
    return {
        fbp: getCookie('_fbp'),
        fbc: get_fbc(),
        product: '',
        category: '',
        event_source_url: window.location.href
    }
}

let verifyHistory = function(){
    let mc_history = getCookie('mc_history');
    let mc_dates = mc_history.split('|');
    if(mc_dates.length > 3){
        sendEvent('UsuarioNavega');
        if(dev){
            console.log('usuarioNavega');
        }
    }
}

let verifyGalleryHistory = function(){
    let mc_gallery_history = getCookie('mc_gallery_history');
    let mc_galleries = mc_gallery_history.split('|');
    if(mc_galleries.length > 2){
        sendEvent('NavegaGaleria');
        if(dev){
            console.log('NavegaGaleria');
        }
    }
}

let setMCCookie = function(){
    let currentValue = getCookie('mc_history');
    let now = new Date();
    document.cookie = `mc_history=${currentValue + now.getTime() + '|'}`;
    verifyHistory();
}

let setGalleryHistoryCookie = function(){
    let galleryHistoryCookie = getCookie('mc_gallery_history');
    let currentPage = window.location.pathname.split('/').pop();
    if(GALLERY.includes(currentPage)){
        let now = new Date();
        document.cookie = `mc_gallery_history=${galleryHistoryCookie + currentPage + '.' + now.getTime()}|`;
        verifyGalleryHistory();
    }
}

let shouldSendEvent = function(eventName, oContentName, oContentCategory){
    if(window.location.pathname.includes('ebooks')){
        sendEvent({eventName:eventName, contentCategory: oContentCategory, contentName: oContentName});
        //console.log('should send ebook event!');
    }
}

let shouldSendTagEvent = function(){
    if(window.location.pathname.split('/').pop() !== 'blog' && window.location.pathname.includes('blog')){
        let topics = Array.prototype.slice.call(document.querySelectorAll('.blog-section .topic-link')).map(topic_link => topic_link.innerText.toUpperCase());
        let uniqueTopics = [...new Set(topics)];
        let contentName = document.querySelector('h1').innerText

        if(BRAND_TAGS.map(item => item.toUpperCase()).some(tag => uniqueTopics.includes(tag))){
            console.log("Should send event BlogTag type Brand");
            sendEvent({eventName: 'BlogTag', contentCategory: 'Marca', contentName: contentName});
        } else if(PERSONAL_TAGS.map(item => item.toUpperCase()).some(tag => uniqueTopics.includes(tag))){
            console.log("Should send event BlogTag type Personal");
            sendEvent({eventName: 'BlogTag', contentCategory: 'Personal', contentName: contentName});
        }
    }
}

let sendEvent = function (eventName, oActionSource){
    let eventBody = collectData();
    eventBody.event = eventName;

    oActionSource ? eventBody.action_source = oActionSource : eventBody.action_source = 'website';

    let options = {
        method: 'POST',
        body: JSON.stringify(eventBody),
        headers: {
            'Content-Type': 'application/json'
        }
    }

    fetch(API_URL, options).then(res => res.json())
        .catch(error => {
            if(dev){
                console.log("Respuesta de la petición: " +  JSON.stringify(error));
                console.error('Error:', error);
            }
        })
        .then(response => {
            if(dev){
                console.log("Respuesta de la petición: " +  JSON.stringify(response));
            }
        });

}

window.addEventListener("load", function(){
    setMCCookie();
    setGalleryHistoryCookie();
    shouldSendTagEvent();

    if(document.getElementById('contact-event')){
        document.getElementById('contact-event').addEventListener('click', function(){
            sendEvent('Contact');
        });
    }
});

window.addEventListener('scroll', function (e){
    if(!contentViewSent && window.pageYOffset > 700){
        sendEvent("ViewContent");
        contentViewSent = true;
    }
});
