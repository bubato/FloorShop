<style type="text/css">
@import "https://fonts.googleapis.com/css?family=Open+Sans:800&display=swap";
h3 {
	 text-align: center;
	 margin: 6% auto;
	 font-size: 1.8rem;
	 font-weight: 800;
	 color: #444;
	 font-family: open sans;
}
 .slider {
	 display: flex;
	 height: 350px;
	 max-height: auto;
	 overflow-y: hidden;
	 overflow-x: scroll !important;
	 padding: 16px;
	 transform: scroll(calc(var(--i,0)/var(--n)*-100%));
	 scroll-behavior: smooth;
}
 .slider::-webkit-scrollbar {
	 height: 5px;
	 width: 150px;
	 display: none;
}
 .slider::-webkit-scrollbar-track {
	 background: transparent;
}
 .slider::-webkit-scrollbar-thumb {
	 background: #888;
}
 .slider::-webkit-scrollbar-thumb:hover {
	 background: #555;
}
 .slider img:hover {
	 transform: scale(1.05);
	 box-shadow: 10px 10px 10px rgba(0,0,0,0.15);
}
 .slide {

	 position: relative;
}
 .slide img {
	 height: 100%;
	 width: 250px;
	 margin: 0 10px;
	 object-fit: cover;
	 border-radius: 15px;
	 cursor: pointer;
	 transition: .25s ease-in-out;
}
 .control-prev-btn {
	 position: absolute;
	 top: 50%;
	 left: 0;
	 background-color: rgba(255,255,255,0.55);
	 height: 100px;
	 line-height: 100px;
	 width: 45px;
	 text-align: center;
	 box-shadow: 0 1px 3px #888;
	 user-select: none;
	 color: #444;
	 cursor: pointer;
}
 .control-next-btn {
	 position: absolute;
	 top: 50%;
	 right: 0;
	 background-color: rgba(255,255,255,0.55);
	 height: 100px;
	 line-height: 100px;
	 width: 45px;
	 text-align: center;
	 box-shadow: 0 1px 3px #888;
	 user-select: none;
	 color: #444;
	 cursor: pointer;
}
.slide img.zoomed{
	  width: 500px;
    height: 600px;
    position: fixed;
    left: 25%;
    top: 0%;
    z-index: 1000;
		transform: scale(1) translatey(0) !important; 
	
}
.overlay{
		position: absolute;
    height: 100%;
    width: 100%;
    background: rgba(0,0,0,.45);
    top: 0;
		display: none;
}
.overlay.active{
	display: block;
}
 @media only screen and (max-width: 420px) {
	 .slider {
		 padding: 0;
	}
	 .slide {
		 padding: 16px 10px;
	}
	 .slide img {
		 margin: 0;
	}
	 .control-prev-btn {
		 top: 37%;
	}
	 .control-next-btn {
		 top: 37%;
	}
}
.btn-delete-image {
	position: absolute;
	top: 10px;
	right: 20px;
	background: white;
	padding: 10px;
	border-radius: 3px;
}
</style>
<div class="card">
	<h3>Chỉnh sửa ảnh slide trang chủ</h3>
	<div id="slider-container" class="slider">
		<div class="slide">
				<img src="https://images.unsplash.com/photo-1574482620811-1aa16ffe3c82?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=20" alt="">
				<div class="btn-delete-image"><i class="ti-trash text-danger"></i></div>
		</div>
		<div class="slide">
				<img src="https://images.unsplash.com/photo-1574451311232-cb647e9d71f9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=20" alt="">
		</div>
		<div class="slide">
				<img src="https://images.unsplash.com/photo-1574449423472-4bc6a3d2473d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=20" alt="">
		</div>
		<div class="slide">
				<img src="https://images.unsplash.com/photo-1574459472673-09bbda49102a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=928&q=20" alt="">
		</div>
		<div class="slide">
				<img src="https://images.unsplash.com/photo-1479981280584-037818c1297d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=20" alt="">
		</div>
		<div class="slide">
				<img src="https://images.unsplash.com/photo-1511593358241-7eea1f3c84e5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=967&q=20" alt="">
		</div>
		<div class="slide">
				<img src="https://images.unsplash.com/photo-1560259324-12a044e67c34?ixlib=rb-1.2.1&auto=format&fit=crop&w=967&q=20" alt="">
		</div>
		<div class="slide">
				<img src="images.unsplash.com/photo-1532787799187-93655e51d472?ixlib=rb-1.2.1&auto=format&fit=crop&w=967&q=20" alt="">
		</div>
		<div onclick="prev()" class="control-prev-btn">
			 <i class="fas fa-arrow-left"></i>
		</div>
		<div onclick="next()" class="control-next-btn">
			<i class="fas fa-arrow-right"></i>
		</div>
	</div>


	<div class="overlay"></div>
</div>

<script type="text/javascript">
	function prev(){
			document.getElementById('slider-container').scrollLeft -= 270;
	}

	function next()
	{
			document.getElementById('slider-container').scrollLeft += 270;
	}	
</script>