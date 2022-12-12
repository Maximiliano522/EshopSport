const productData = [
    {
        index: '01',
        name: 'Run Red',  
        image: './img/imgH1.png', 
        des: 'Sientete libre y como a la hora de entrenar con esta increible blusa roja.', 
        desLeft: 'Gran y nuevo diseño de los diseñadores de la marca Nueva Shein',
    },
    {
        index: '02',
        name: 'Red outfit',  
        image: './img/img2.jpg', 
        des: 'Alerta peligro. Y, sobre todo, es el color de la consciencia. La mujer que elige llevar un vestido rojo hace una afirmación imponente: sabe quién es y sabe perfectamente cuál es su lugar.', 
        desLeft: 'Gran y nuevo diseño de los diseñadores de la marca New Mod',
    },
    {
        index: '03',
        name: 'Green Mood',  
        image: './img/img3.jpg', 
        des: '¿Qué significa el vestido color Verde: frescura, libertad, sanación, esperanza, bienestar y serenidad todo lo positivo se asocia al verde al igual que la felicidad. Con el color verde se avanza, se progresa y se logra ser más positivo',
        desLeft: 'Gran y nuevo diseño de los diseñadores de la marca Shein', 
    }
]

const nxtBtn = document.querySelector('.nxt-btn')
let smImgContainer = document.querySelector('.sm-product-img-container')
let smImg = document.querySelector('.sm-product-img')
let productIndex = document.querySelector('.product-index')
let smProductDes = document.querySelector('.sm-product-des')

let productImgContainer = document.querySelector('.product-img-container')
let productImg = document.querySelector('.product-img')
let backdropImg = document.querySelector('.backdrop-img')

let productDetail = document.querySelector('.product-detail')
let productName = document.querySelector('.product-name')
let productDes = document.querySelector('.product-des')

let currentProduct = 0

nxtBtn.addEventListener('click', () => {
    if(currentProduct >=   productData.length -1) {
        currentProduct = 0
    } else {
        currentProduct ++
    }
    productIndex.innerHTML = productData[currentProduct].index
    smProductDes.innerHTML = productData[currentProduct].desLeft.slice(0,100)
    productDes.innerHTML = productData[currentProduct].des.slice(0,200)
    productName.innerHTML = productData[currentProduct].name
    smImg.src= productData[currentProduct].image;
    backdropImg.src= productData[currentProduct].image;
    productImg.src= productData[currentProduct].image;
})

const productButton = document.querySelector(".productButton2")
const payment = document.querySelector(".payment2")
const close = document.querySelector(".close")

productButton.addEventListener("click", () =>{
    payment.style.display = "flex"
})

close.addEventListener("click", () => {
    payment.style.display = "none"
})