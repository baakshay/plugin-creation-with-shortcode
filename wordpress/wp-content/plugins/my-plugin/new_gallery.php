<style>
    * {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
  font-family: Raleway;
}

body {
  background: #dcd9cd;
}

.input-container {
  display: flex;
  justify-content: center;
  padding-top: 40px;
  padding-bottom: 40px;
}

input {
  width: 450px;
  border: 2px solid rgb(207, 207, 207);
  border-radius: 6px;
  height: 50px;
  padding-left: 10px;
}

input::placeholder {
  font-size: 16px;
  opacity: 0.4;
}

input:focus {
  outline-color: rgb(124, 176, 236);
}

.gallery_title {
  text-align: center;
  padding-bottom: 1rem;
}

.gallery {
  box-shadow: 0 0.1rem 0 0 rgba(0, 0, 0, 0.1);
  margin: 0 auto;
  display: grid;
  max-width: 780px;
  grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
  grid-auto-rows: 180px;
  grid-gap: 20px;
  padding-bottom: 70px;
}

.gallery .item {
  max-width: 180px;
  height: 180px;
  margin: 0 auto;
  cursor: pointer;
  filter: grayscale(40%);
}

.gallery .item:hover {
  filter: none;
  transition: 0.3s ease-out;
  transform: scale(1.06);
}

img {
  max-width: 180px;
  height: 70%;
  box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 10px 0px,
    rgba(0, 0, 0, 0.5) 0px 2px 15px 0px;
}

@media screen and (max-width: 480px) {
  input::placeholder {
    font-size: 13px;
  }
}
</style>

<main>
  <div class="input-container">
    <input type="text" placeholder='Search for mountain, lake, ocean, tree...' id='input'>
  </div>

  <div class="gallery_title">
    <h1>Design Collections</h1>
  </div>

  <article class='gallery'>
    <a href="https://images.pexels.com/photos/2356059/pexels-photo-2356059.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" data-caption='The great thing about reaching the top of the mountain is realising that there’s space for more than one person. And you’re now in the prime position to help others up.' class='item' title='Hay Bales'>
      <img src="https://images.pexels.com/photos/2356059/pexels-photo-2356059.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="first image">
    </a>
    <a href="https://images.pexels.com/photos/814499/pexels-photo-814499.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" data-caption='A lake is a landscape’s most beautiful and expressive feature. It is Earth’s eye; looking into which the beholder measures the depth of his own nature.' class='item' title='Lake'>
      <img src="https://images.pexels.com/photos/814499/pexels-photo-814499.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="second image">
    </a>
    <a href="https://images.pexels.com/photos/2775196/pexels-photo-2775196.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" data-caption='The human desire to obtain more is a sieve that can never be filled with all the water from the world’s oceans' title='Canyon' class='item'>
      <img src="https://images.pexels.com/photos/2775196/pexels-photo-2775196.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="third image">
    </a>
    <a href="https://images.pexels.com/photos/20045/pexels-photo.jpg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" data-caption="Knowing trees, I understand the meaning of patience. Knowing grass, I can appreciate persistence." title='Iceberg' class='item'>
      <img src="https://images.pexels.com/photos/20045/pexels-photo.jpg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="fourth image">
    </a>
    <a href="https://images.pexels.com/photos/6004828/pexels-photo-6004828.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" data-caption="Life is like a train track, full of possibilities and happiness" title='Desert' class='item'>
      <img src="https://images.pexels.com/photos/6004828/pexels-photo-6004828.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="fifth image">
    </a>
    <a href="https://images.pexels.com/photos/1533060/pexels-photo-1533060.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" data-caption='Hell is a swamp, to me - not as something fiery, but as something dank, moist, and wet' title='Fall' class='item'>
      <img src="https://images.pexels.com/photos/1533060/pexels-photo-1533060.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="sixth image">
    </a>
    <a href="https://images.pexels.com/photos/20045/pexels-photo.jpg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" data-caption="Knowing trees, I understand the meaning of patience. Knowing grass, I can appreciate persistence." title='Iceberg' class='item'>
      <img src="https://images.pexels.com/photos/20045/pexels-photo.jpg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="fourth image">
    </a>
    <a href="https://images.pexels.com/photos/814499/pexels-photo-814499.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" data-caption='A lake is a landscape’s most beautiful and expressive feature. It is Earth’s eye; looking into which the beholder measures the depth of his own nature.' class='item' title='Lake'>
      <img src="https://images.pexels.com/photos/814499/pexels-photo-814499.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="second image">
    </a>
  </article>
</main>
<script>
  window.addEventListener('load', function() {
    baguetteBox.run('.gallery');
  });
</script>

<script>
    let input = document.getElementById('input')

const handleSearch = (e) => {
  let inputValue = e.target.value.toLowerCase();
  let array = document.getElementsByClassName('item')

  for (let i = 0; i < array.length; i++) {
    let image = array[i]
    let caption = image.getAttribute('data-caption').toLowerCase()
    let title = image.getAttribute('title').toLowerCase()
    caption.includes(inputValue) || title.includes(inputValue)? image.style.display = 'inline' : image.style.display = 'none'
  }
}
input.addEventListener('keyup', handleSearch)

baguetteBox.run('.gallery', {
    captions: true,
    buttons: 'auto',
    animation: 'fadeIn'
});
</script>