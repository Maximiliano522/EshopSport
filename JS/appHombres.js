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
        name: 'Fight outfit',  
        image: './img/imgH2.png', 
        des: 'Increible blusa lista para la pelea de todos los dias.', 
        desLeft: 'Gran y nuevo diseño de los diseñadores de la marca New Mod',
    },
    {
        index: '03',
        name: 'Green Mood Man',  
        image: './img/imgH3.png', 
        des: 'Increible diseño para este verano inolvidable desde la mano de la mnarca siempre inovadora NASA',
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