<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VILLA</title>
</head>
<style>
    article {
  --img-scale: 1.001;
  --title-color: black;
  --link-icon-translate: -20px;
  --link-icon-opacity: 0;
  position: relative;
  border-radius: 16px;
  box-shadow: none;
  background: #fff;
  transform-origin: center;
  transition: all 0.4s ease-in-out;
  overflow: hidden;
}

article a::after {
  position: absolute;
  inset-block: 0;
  inset-inline: 0;
  cursor: pointer;
  content: "";
}

/* basic article elements styling */
article h2 {
  margin: 0 0 18px 0;
  font-family: "Bebas Neue", cursive;
  font-size: 1.9rem;
  letter-spacing: 0.06em;
  color: var(--title-color);
  transition: color 0.3s ease-out;
}

figure {
  margin: 0;
  padding: 0;
  aspect-ratio: 16 / 9;
  overflow: hidden;
}

article img {
  max-width: 100%;
  transform-origin: center;
  transform: scale(var(--img-scale));
  transition: transform 0.4s ease-in-out;
}

.article-body {
  padding: 24px;
}

article a {
  display: inline-flex;
  align-items: center;
  text-decoration: none;
  color: #28666e;
}

article a:focus {
  outline: 1px dotted #28666e;
}

article a .icon {
  min-width: 24px;
  width: 24px;
  height: 24px;
  margin-left: 5px;
  transform: translateX(var(--link-icon-translate));
  opacity: var(--link-icon-opacity);
  transition: all 0.3s;
}

/* using the has() relational pseudo selector to update our custom properties */
article:has(:hover, :focus) {
  --img-scale: 1.1;
  --title-color: #28666e;
  --link-icon-translate: 0;
  --link-icon-opacity: 1;
  box-shadow: rgba(0, 0, 0, 0.16) 0px 10px 36px 0px, rgba(0, 0, 0, 0.06) 0px 0px 0px 1px;
}


/************************ 
Generic layout (demo looks)
**************************/

*,
*::before,
*::after {
  box-sizing: border-box;
}

body {
  margin: 0;
  padding: 48px 0;
  font-family: "Figtree", sans-serif;
  font-size: 1.2rem;
  line-height: 1.6rem;
  background-image: linear-gradient(45deg, #7c9885, #b5b682);
  min-height: 100vh;
}

.articles {
  display: grid;
  max-width: 1200px;
  margin-inline: auto;
  padding-inline: 24px;
  grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
  gap: 24px;
}

@media screen and (max-width: 960px) {
  article {
    container: card/inline-size;
  }
  .article-body p {
    display: none;
  }
}

@container card (min-width: 380px) {
  .article-wrapper {
    display: grid;
    grid-template-columns: 100px 1fr;
    gap: 16px;
  }
  .article-body {
    padding-left: 0;
  }
  figure {
    width: 100%;
    height: 100%;
    overflow: hidden;
  }
  figure img {
    height: 100%;
    aspect-ratio: 1;
    object-fit: cover;
  }
}

.sr-only:not(:focus):not(:active) {
  clip: rect(0 0 0 0); 
  clip-path: inset(50%);
  height: 1px;
  overflow: hidden;
  position: absolute;
  white-space: nowrap; 
  width: 1px;
}
</style>
<body>
<section class="articles">
  <article>
    <div class="article-wrapper">
      <figure>
        <img src="https://t3.ftcdn.net/jpg/05/33/82/34/360_F_533823407_h0wVzQub7h3b6OZVWE44BPf5E6SHndxI.jpg" alt="" />
      </figure>
      <div class="article-body">
        <h2>Tiffin</h2>
        <p>
        Tiffin is a term commonly used in India and some other parts of South Asia to refer to a light meal or snack, often packed in a multi-tiered lunchbox. It typically includes items like chapatis, rice, curries, sandwiches, or idlis, depending on regional preferences. Tiffin is popular among students and office-goers as a convenient and home-cooked alternative to fast food. The concept of tiffin services, where homemade meals are delivered to workplaces and schools, is especially famous in cities like Mumbai, where the dabbawalas efficiently transport thousands of tiffin boxes daily.        </p>
        <a href="#" class="read-more" style="border:1px solid green; background:transparent; width:100px; padding:12px; border-radius:5px;">
          Order
        </a>
      </div>
    </div>
  </article>
  <article>

    <div class="article-wrapper">
      <figure>
        <img src="https://www.shutterstock.com/image-photo/open-buffet-very-delicious-varieties-600nw-1919678066.jpg" alt="" />
      </figure>
      <div class="article-body">
        <h2>Buffets</h2>
        <p>
        A buffet is a popular style of meal service where a variety of dishes are displayed for self-service, allowing diners to choose their preferred items in desired portions. Buffets are commonly found in restaurants, hotels, and events, offering a diverse selection of appetizers, main courses, sides, and desserts. This dining format is favored for its convenience and variety, catering to different tastes and dietary preferences. From lavish breakfast buffets with fresh fruits, pastries, and eggs to grand dinner spreads featuring global cuisines, buffets provide an enjoyable and flexible dining experience.        </p>
        <a href="#" class="read-more" style="border:1px solid green; background:transparent; width:100px; padding:12px; border-radius:5px;">
          Order
        </a>
      </div>
    </div>
  </article>
  <article>

    <div class="article-wrapper">
      <figure>
        <img src="https://media.istockphoto.com/id/473582820/photo/nepali-thali-meal-set-with-mutton-curry.jpg?s=612x612&w=0&k=20&c=57AIVUdYVCe09dINwzr_fkG0TuqpO_JMeJHqEM8bT1A=" alt="" />
      </figure>
      <div class="article-body">
        <h2>Meals</h2>
        <p>
        Meals are an essential part of daily life, providing nourishment and energy for the body. They are typically divided into three main categories: breakfast, lunch, and dinner, with some cultures also including snacks or tea-time in between. The composition of meals varies across regions and traditions, often reflecting local ingredients, customs, and dietary habits. A balanced meal usually consists of proteins, carbohydrates, healthy fats, and essential vitamins to support overall health.  meals also serve as an opportunity for social interaction, bringing families and communities together.
        </p>
        <a href="#" class="read-more" style="border:1px solid green; background:transparent; width:100px; padding:12px; border-radius:5px;">
          Order
        </a>
      </div>
    </div>
  </article>
</section>
</body>
</html>