const slides=document.querySelectorAll('.slides')
// console.log(slides);\
const totalSlides = slides.length;
var counter=0;

slides.forEach(
    (slide,index)=>
    {
        slide.style.left = `${index * 100}%`
    }
)
const goPrev= () =>
{
    counter = (counter - 1 + totalSlides) % totalSlides;
    // alert()
    slideImage();

}
const goNext= () =>
{
    counter = (counter + 1) % totalSlides;
    slideImage();

}

const slideImage = () =>
{
    slides.forEach(
        (slide)=>
        {
            slide.style.transform=`translateX(-${counter*100}%)`;
        }
    )
}

// navscoll
let selections=document.querySelectorAll('section');
let navLinks=document.querySelectorAll('header nav a');

window.onscroll = () =>
{
    selections.forEach(sec=>{
        let top=window.scrollY;
        let offset = sec.offsetTop;
        let height =sec.offsetHeight;
        let id=sec.getAttribute('id');
        if(top >=offsetTop && top < offset +height)
        { 
            navLinks.forEach(links =>
                {
                  links.classList.remove('active');
                  document.querySelectorAll('header nav a[href*='+ id+']').classList.add('active');

                });
                

        }
    })
}