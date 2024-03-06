<div class="card">
  <nav>
    <svg class="arrow" version="1.1" viewBox="0 0 512 512" width="512px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><polygon points="352,115.4 331.3,96 160,256 331.3,416 352,396.7 201.5,256 " stroke="#727272"/></svg>
    BUKU DONGENG ANAK KECIL
    <svg class="heart" version="1.1" viewBox="0 0 512 512" width="512px" xml:space="preserve" stroke="#727272" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M340.8,98.4c50.7,0,91.9,41.3,91.9,92.3c0,26.2-10.9,49.8-28.3,66.6L256,407.1L105,254.6c-15.8-16.6-25.6-39.1-25.6-63.9  c0-51,41.1-92.3,91.9-92.3c38.2,0,70.9,23.4,84.8,56.8C269.8,121.9,302.6,98.4,340.8,98.4 M340.8,83C307,83,276,98.8,256,124.8  c-20-26-51-41.8-84.8-41.8C112.1,83,64,131.3,64,190.7c0,27.9,10.6,54.4,29.9,74.6L245.1,418l10.9,11l10.9-11l148.3-149.8  c21-20.3,32.8-47.9,32.8-77.5C448,131.3,399.9,83,340.8,83L340.8,83z" stroke="#727272"/></svg>
  </nav>
  <div class="photo">
    <img src="https://siplah-oss.tokoladang.co.id/merchant/29027/product/4REdoLxVUpZkIWDgTUVVAPv5mxtnQ1ez5Dj9OLfB.jpg">
  </div>
  <div class="description">
    <h2>Buku Dongeng Anak Kecil</h2>
    <h4>Fiksi</h4>
    <h1>Rp 100.000 </h1>
    <p>10 Dongeng terbaik dari nusantara untuk anak kecil yang dirangkum dalam 1 buku. Diterbitkan oleh Saello Puza Lesmana Daneza pada tahun 2023 lalu, laku dipasaran ...</p>
    <button>Lihat</button>
    <button>Beli</button>
  </div>
</div>
<style>
@import url(https://fonts.googleapis.com/css?family=Raleway:400,300,500,700);
* { box-sizing: border-box; }

body {
  
  background: #aedaa6;
  font-family: "Raleway";
  
  .card {
    
    width: 650px;
    // height: 375px;
    position: absolute;
    background: white;
    margin: 0 auto;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    box-shadow: 0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12);
    transition: all 0.3s;
    
    &:hover {
      
      box-shadow: 0 8px 17px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    
    }
    
    nav {
      
      width: 100%;
      color: #727272;
      text-transform: uppercase;
      padding: 20px;
      border-bottom: 2px solid #efefef;
      font-size: 12px;
      
      svg.heart {
        
        height: 24px;
        width: 24px;
        float: right;
        margin-top: -3px;
        transition: all 0.3s ease;
        cursor: pointer;
        
        &:hover {
          
          fill: red;
          
        }
        
      }
      svg.arrow {
        
        float: left;
        height: 15px;
        width: 15px;
        margin-right: 10px;
        
      }
      
    }
    
    .photo {
      
      padding: 30px;
      width: 45%;
      text-align: center;
      float: left;
      
      img { 
        max-height: 240px; 
      }
      
    }
    
    .description {
      
       padding: 30px;
       float: left;
       width: 55%;
       border-left: 2px solid #efefef;
       
       h1 {
         color: #515151;
         font-weight: 300;
         padding-top: 15px;
         margin: 0;
         font-size: 30px;
         font-weight: 300;
       }
     
       h2 {
        color: #515151;
        margin: 0;
        text-transform: uppercase;
        font-weight: 500;
       }
      
       h4 { 
         margin: 0;
         color: #727272;
         text-transform: uppercase;
         font-weight: 500;
         font-size: 12px
       }
      
       p { 
         font-size: 12px; 
         line-height: 20px;
         color: #727272;
         padding: 20px 0;
         margin: 0;
      }
      
       button {

         outline: 0;
         border: 0;
         background: none;
         border: 1px solid #d9d9d9;
         padding: 8px 0px;
         margin-bottom: 30px;
         color: #515151;
         text-transform: uppercase;
         width: 125px;
         font-family: inherit;
         margin-right: 5px;
         transition: all 0.3s ease;
         font-weight: 500;
	   	} 
        hover {
           
           background: darken(white, 2%);
           border: 1px solid #aedaa6;
           color: #aedaa6;
           cursor: pointer;
           
         }

       }
      
    }
    
  }
  
}
</style>