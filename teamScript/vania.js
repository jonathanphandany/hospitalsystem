const Tombol1 = document.querySelector(".satu")
const Tombol2 = document.querySelector(".dua")
const Gambar = document.querySelector(".gambar")
let angka = 1

Tombol1.onclick = ()=>{
	
	if(angka >= 9){
		angka = 1
	}else{
		angka++
	}
	const cek = Gambar.classList.length
	console.log('cek' + cek)
	if(cek >= 2){
		const isiarrayclass = Gambar.classList[1]
		console.log(isiarrayclass)
		if(isiarrayclass === 'animasi'){
			Gambar.classList.remove("animasi")
			Gambar.classList.add("animasi2")
		}else{
			Gambar.classList.remove("animasi2")
			Gambar.classList.add("animasi")
		}
	}else{
		Gambar.classList.add("animasi")
	}
	
	Gambar.src = 'img/' + angka + '.png' 
	console.log(angka)
}

Tombol2.onclick = ()=>{
	
	if(angka <= 1){
		angka = 9
	}else{
		angka--
	}
	const cek = Gambar.classList.length
	console.log('cek' + cek)
	if(cek >= 2){
		const isiarrayclass = Gambar.classList[1]
		console.log(isiarrayclass)
		if(isiarrayclass === 'animasi'){
			Gambar.classList.remove("animasi")
			Gambar.classList.add("animasi2")
		}else{
			Gambar.classList.remove("animasi2")
			Gambar.classList.add("animasi")
		}
	}else{
		Gambar.classList.add("animasi")
	}
	
	Gambar.src = 'img/' + angka + '.png' 
	console.log(angka)
}