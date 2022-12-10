console.log('Conectado hijo')

const wrapper = document.querySelector(".sliderWrapper")
const menuItems = document.querySelectorAll(".menuItem")

const products = [
    {
        id: 1,
        title: "Adidas",
        colors: [
            {
                code: "AdidasMujer",
                img: "./img/AdidasM.jpg"
            }
        ]
    },
    {
        id: 2,
        title: "Nike",
        colors: [
            {
                code: "NikeHombre",
                img: "./img/NikeH.jpg"
            }
        ]
    },
    {
        id: 3,
        title: "Under Armour",
        colors: [
            {
                code: "UnderArmourNiño",
                img: "./img/UnderArmourN.jpg"
            }
        ]
    },

]

let choosenProduct = products[0]

const currentProductImg = document.querySelector(".productImg")
const currentProductTitle = document.querySelector(".productTitle")
const currentProductColors = document.querySelectorAll(".color")
const currentProductSizes = document.querySelectorAll(".size")

menuItems.forEach( (item, index) => {
    item.addEventListener("click", () => {
        wrapper.style.transform = `translateX(${-100 * index}vw)`
        choosenProduct = products[index]
        currentProductTitle.textContent = choosenProduct.title
        currentProductImg.src = choosenProduct.colors[0].img

        currentProductColors.forEach( (color, index) => {
            color.style.backgroundColor = choosenProduct.colors[index].code
        })
        //console.log(choosenProduct)
    })
})

currentProductColors.forEach( (color, index) => {
    color.addEventListener("click", () => {
        currentProductImg.src = choosenProduct.colors[index].img
        //console.log(currentProductImg.src, choosenProduct.colors[index].img)
    })
})

currentProductSizes.forEach( (size) => {
    size.addEventListener("click", () => {
        currentProductSizes.forEach( (size) => {
            size.style.backgroundColor = "white"
            size.style.color = "black"
        })
        size.style.backgroundColor = "black"
            size.style.color = "white"
    })
})

const productButton = document.querySelector(".productButton")
const payment = document.querySelector(".payment")
const close = document.querySelector(".close")

productButton.addEventListener("click", () =>{
    payment.style.display = "flex"
})

close.addEventListener("click", () => {
    payment.style.display = "none"
})
