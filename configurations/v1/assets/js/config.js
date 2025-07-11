

   // reponsive_wheel


//******select color page
const selectPagecolors = document.querySelectorAll('.select-page-color .color-panel span')
const indecatorSelectColor = document.querySelectorAll('.selected-color span')
let colorCarry = [];

function selectColorFunc() {
    selectPagecolors.forEach((color, index) => {
        color.addEventListener('click', ()=>{

         let colorParentIndex = Array.from(color.parentElement.parentElement.children).indexOf(color.parentElement)
         

            let colorMenu = document.querySelector(`.wheel-menu span:nth-child(${colorParentIndex + 1})`)
            
            if (colorMenu.children[0] == undefined) {
                let spanCreated = document.createElement('SPAN')
                spanCreated.innerHTML = '0';
                colorMenu.appendChild(spanCreated)
            }
            

            if (colorCarry.length < 2) {
                if(color.classList.contains('active-check')){
                    color.classList.remove('active-check')
                    if (colorMenu.children[0]) {
                        colorMenu.children[0].innerHTML--;
                    }
                }else{
                    color.classList.add('active-check')
                    if (colorMenu.children[0]) {
                        colorMenu.children[0].innerHTML++;
                    }
                }
            }else{
                if(color.classList.contains('active-check')){
                    color.classList.remove('active-check')
                    if (colorMenu.children[0]) {
                        colorMenu.children[0].innerHTML--;
                    }
                }else{
                  errorContent.innerHTML = "You can't choose more than 2 color.";
                  errorWrap.classList.add('active')
                }
            }

            
            colorCarry = []
            for (let i = 0; i < selectPagecolors.length; i++) {
                if (selectPagecolors[i].classList.contains('active-check')) {
                    colorCarry.push(selectPagecolors[i])
                }
            }
            
            for (let i = 0; i < indecatorSelectColor.length; i++) {
                indecatorSelectColor[i].style.backgroundColor = '';
            }
            for (let j = 0; j < colorCarry.length; j++) {
                indecatorSelectColor[j].style.backgroundColor = colorCarry[j].style.backgroundColor;
            }

            

                
        })
    });
};selectColorFunc();




// menu tab active
const wheelMenu = document.querySelectorAll('.wheel-menu span')
const colorPanelWrap = document.querySelectorAll('.select-page-color .color-panel')

function menuTab() {
   wheelMenu.forEach((menu, index) => {
      menu.addEventListener('click', ()=>{
         
         for (let i = 0; i < wheelMenu.length; i++) {
            wheelMenu[i].classList.remove('active')
            colorPanelWrap[i].classList.remove('active')
         }

         menu.classList.add('active')
         colorPanelWrap[index].classList.add('active')
      })
   });
};menuTab();



document.querySelector('.get-quote-btn').addEventListener('click', ()=>{
   
   document.querySelector('.custom-wheel-item').classList.remove('active')
   document.querySelector('.thankyou-page').classList.add('active')

   document.querySelector('.big-wheel-1').innerHTML = document.querySelector('.wheel-img').innerHTML
})

// error
const errorWrap = document.querySelector('.error-wrap')
const errorContent = document.querySelector('.error-content h4')
errorWrap.addEventListener('click', ()=>{
   errorWrap.classList.remove('active')
})


// next prev btns 
const pageIndecatorNum = document.querySelector('.indicator-counter')
const pageIndecatorLine = document.querySelector('.indicator')

const wheelPart = document.querySelectorAll('.wheel-part')
const invertBtn = document.querySelector('.invert-btn')

const selectPageColor = document.querySelector('.select-page-color')
const choosePageColor = document.querySelectorAll('.choose-page-color')

const nextBtn = document.querySelector('.next')
const prevtn = document.querySelector('.prev')
counter = -1;
counter2 = 0;


nextBtn.addEventListener('click', ()=>{


   if (counter < 9) {


      if (colorCarry.length == 0) {
         errorContent.innerHTML = 'Please choose color';
         errorWrap.classList.add('active')
      }else if (colorCarry.length == 1) {
         errorContent.innerHTML = 'Please choose One more color to nice adjustment';
         errorWrap.classList.add('active')
      }else{
         
         document.querySelector('.selected-color').style.pointerEvents = 'all';
         
         if (counter >= 0) {
            let checkerActive;
            document.querySelectorAll(`.choose-page-color:nth-child(${counter + 2}) .color-panel span`).forEach(color => {
               if (color.classList.contains('active-check')) {
                  checkerActive = 1
               }
            });

            if (1 == checkerActive) {
               counter++;
            }else{
               errorContent.innerHTML = 'Please choose color to get nice wheel';
               errorWrap.classList.add('active')
            }


         }else{
            counter++
         }

         prevtn.classList.add('active')

         pageIndecatorNum.innerHTML = `0${counter + 1}`
         pageIndecatorLine.style.width = `${pageIndecatorLine.parentElement.clientWidth / choosePageColor.length * (counter + 1)}px`
   
   
         if (counter > 1) {
            invertBtn.classList.add('active')
         }else{
            invertBtn.classList.remove('active')
         }
   
         document.querySelector('.wheel-preview').classList.add('active')
         document.querySelector('.placeholder-logo').classList.remove('active')
         
         selectPageColor.classList.remove('active')
         for (let i = 0; i < choosePageColor.length; i++) {
            choosePageColor[i].classList.remove('active')
         }
      
         choosePageColor[counter].classList.add('active')
   
         document.querySelectorAll('.choose-page-color .color-panel').forEach(colorPanelWrap => {
            colorPanelWrap.classList.remove('active')
         });
         document.querySelectorAll('.choose-page-color .color-panel span').forEach(color => {
            color.classList.remove('active')
         });
        
   
         if (counter2 == 1) {
            document.querySelectorAll(`.choose-page-color .color-panel span`).forEach(img =>{
               img.classList.remove('active-check')
            })
            document.querySelectorAll(`.wheel-part img`).forEach(img =>{
               img.classList.remove('active')
            })
         }
         
         
         colorCarry.forEach((color, index) => {
            let chooseAllPageColor = document.querySelectorAll('.choose-page-color')
      
            let colorPanel = color.parentElement
            let colorPanelIndex = Array.from(colorPanel.parentElement.children).indexOf(colorPanel)
            let colorIndex = Array.from(color.parentElement.children).indexOf(color)
            
      
            for (let i = 0; i < chooseAllPageColor.length; i++) {
               chooseAllPageColor[i].children[1].children[colorPanelIndex].classList.add('active')
               chooseAllPageColor[i].children[1].children[colorPanelIndex].children[colorIndex].classList.add('active')
            }
   
            if (counter2 == 1) {
      
               if (index == 0) {
                  activeImgCarry0.forEach(img => {
                     let activeImgPageIndex = Array.from(img.parentElement.parentElement.parentElement.children).indexOf(img.parentElement.parentElement)
      
                     document.querySelector(`.wheel-part:nth-child(${activeImgPageIndex + 1}) .wheel-part-img:nth-child(${colorPanelIndex + 1}) img:nth-child(${colorIndex + 1})`).classList.add('active')
   
                     document.querySelector(`.choose-page-color:nth-child(${activeImgPageIndex + 2}) .color-panel:nth-child(${colorPanelIndex + 1}) span:nth-child(${colorIndex + 1})`).classList.add('active-check')
   
                  });
               }
   
               if (index == 1) {
                  activeImgCarry1.forEach(img => {
                     let activeImgPageIndex = Array.from(img.parentElement.parentElement.parentElement.children).indexOf(img.parentElement.parentElement)
      
                     document.querySelector(`.wheel-part:nth-child(${activeImgPageIndex + 1}) .wheel-part-img:nth-child(${colorPanelIndex + 1}) img:nth-child(${colorIndex + 1})`).classList.add('active')
   
                     document.querySelector(`.choose-page-color:nth-child(${activeImgPageIndex + 2}) .color-panel:nth-child(${colorPanelIndex + 1}) span:nth-child(${colorIndex + 1})`).classList.add('active-check')
   
                  });
               }
            }
      
         });
   
   
      }
      
      counter2 = 0
   }else{
      document.querySelector('.custom-wheel-item').classList.add('active')
      document.querySelector('.wheel-config-wrapper').style.display = 'none';
      pageIndecatorNum.innerHTML = counter + 1
   }

})


prevtn.addEventListener('click', ()=>{

   if (counter > -1) {   
      counter--;
   
      if (counter < 9) {
         pageIndecatorNum.innerHTML = `0${counter + 1}`
      }else{
         pageIndecatorNum.innerHTML = counter + 1
      }
   
      selectPageColor.classList.remove('active')
   
      for (let i = 0; i < choosePageColor.length; i++) {
         choosePageColor[i].classList.remove('active')
      }
   
   
      if (counter > -1) {
         choosePageColor[counter].classList.add('active')
      }else{
         selectPageColor.classList.add('active')
         prevtn.classList.remove('active')
         document.querySelector('.selected-color').style.pointerEvents = 'none'
      }
   }

   
})


const formBackBtn = document.querySelector('.wheel-back-btn')
formBackBtn.addEventListener('click', ()=>{
   document.querySelector('.custom-wheel-item').classList.remove('active')
   document.querySelector('.wheel-config-wrapper').style.display = 'block'
})


// choose img with color
const choosenColor = document.querySelectorAll('.choose-page-color .color-panel span')

choosenColor.forEach(color => {
   color.addEventListener('click', ()=>{

      let choosePageColor = color.parentElement.parentElement.parentElement
      let colorPanel = color.parentElement

      let choosePageColorIndex = Array.from(choosePageColor.parentElement.children).indexOf(choosePageColor)
      let colorPanelIndex = Array.from(colorPanel.parentElement.children).indexOf(colorPanel)
      let colorIndex = Array.from(color.parentElement.children).indexOf(color)
     
      document.querySelectorAll(`.wheel-part:nth-child(${choosePageColorIndex}) img`).forEach(img => {
         img.classList.remove('active')
      });

      document.querySelectorAll(`.single-price`).forEach(price => {
         price.classList.remove('active')
      });

      document.querySelectorAll(`.choose-page-color:nth-child(${choosePageColorIndex + 1}) .color-panel span`).forEach(color => {
         color.classList.remove('active-check')
      });

      wheelPartImg =  document.querySelector(`.wheel-part:nth-child(${choosePageColorIndex}) .wheel-part-img:nth-child(${colorPanelIndex + 1}) img:nth-child(${colorIndex + 1})`)

      wheelPrice =  document.querySelector(`.single-page-price:nth-child(${choosePageColorIndex}) .price-panel:nth-child(${colorPanelIndex + 1}) .single-price:nth-child(${colorIndex + 1})`)

      wheelPartImg.classList.add('active')
      wheelPrice.classList.add('active')

      document.querySelector('.wheel-preview img').src = wheelPartImg.src
      color.classList.add('active-check')

   })
});


let activeImgCarry0 = []
let activeImgCarry1 = []

document.querySelectorAll('.selected-color ul li').forEach((color, index) => {
   document.querySelector('.selected-color').style.pointerEvents = 'none';

   color.addEventListener('click', ()=>{
      selectPageColor.classList.add('active')
      for (let i = 0; i < choosePageColor.length; i++) {
         choosePageColor[i].classList.remove('active')
      }

      document.querySelector('.selected-color').style.pointerEvents = 'none';

      counter--
      counter2 = 1

      activeImgCarry0 = []
      activeImgCarry1 = []

      colorCarry.forEach((color, index) => {

         let colorIndex = Array.from(color.parentElement.children).indexOf(color)
         let colorParentIndex = Array.from(color.parentElement.parentElement.children).indexOf(color.parentElement)

         
         document.querySelectorAll(`.wheel-part-img:nth-child(${colorParentIndex + 1}) img:nth-child(${colorIndex + 1})`).forEach(img =>{
            if (img.classList.contains('active')) {
               if (index == 0) {
                  activeImgCarry0.push(img)
               }
               if (index == 1) {
                  activeImgCarry1.push(img)
               }
            }
         })


      });


   })
});



// invert-btn
   invertBtn.addEventListener('click', ()=>{

      activeImgCarry0 = []
      activeImgCarry1 = []


      colorCarry.forEach((color, index) => {

         let colorIndex = Array.from(color.parentElement.children).indexOf(color)
         let colorParentIndex = Array.from(color.parentElement.parentElement.children).indexOf(color.parentElement)

         document.querySelectorAll(`.wheel-part-img:nth-child(${colorParentIndex + 1}) img:nth-child(${colorIndex + 1})`).forEach((img) =>{
            if (img.classList.contains('active')) {
               if (index == 0) {
                  activeImgCarry0.push(img)
               }else{
                  activeImgCarry1.push(img)
               }
            }
         })
      });

      document.querySelectorAll(`.wheel-part img`).forEach(img =>{
         img.classList.remove('active')
      })
      document.querySelectorAll(`.choose-page-color .color-panel span`).forEach(img =>{
         img.classList.remove('active-check')
      })

      activeImgCarry0.forEach((img) => {
         let imgPageIndex = Array.from(img.parentElement.parentElement.parentElement.children).indexOf(img.parentElement.parentElement)

         activeImgCarry1.forEach((img1) => {
            let img1Index = Array.from(img1.parentElement.children).indexOf(img1)
            let img1WrapIndex = Array.from(img1.parentElement.parentElement.children).indexOf(img1.parentElement)

            document.querySelector(`.wheel-part:nth-child(${imgPageIndex + 1}) .wheel-part-img:nth-child(${img1WrapIndex + 1}) img:nth-child(${img1Index + 1})`).classList.add('active')

            document.querySelector(`.choose-page-color:nth-child(${imgPageIndex + 2}) .color-panel:nth-child(${img1WrapIndex + 1}) span:nth-child(${img1Index + 1})`).classList.add('active-check')
         });
      });

      activeImgCarry1.forEach((img) => {
         let imgPageIndex = Array.from(img.parentElement.parentElement.parentElement.children).indexOf(img.parentElement.parentElement)

         activeImgCarry0.forEach((img0) => {
            let img0Index = Array.from(img0.parentElement.children).indexOf(img0)
            let img0WrapIndex = Array.from(img0.parentElement.parentElement.children).indexOf(img0.parentElement)

            document.querySelector(`.wheel-part:nth-child(${imgPageIndex + 1}) .wheel-part-img:nth-child(${img0WrapIndex + 1}) img:nth-child(${img0Index + 1})`).classList.add('active')

            document.querySelector(`.choose-page-color:nth-child(${imgPageIndex + 2}) .color-panel:nth-child(${img0WrapIndex + 1}) span:nth-child(${img0Index + 1})`).classList.add('active-check')
         });

      });

   })