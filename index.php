<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

</head>
<body>
    
<div class="container article-feed" style="max-width:500px;margon-auto;">  
  <article class="article">
    <h1>Page 1</h1>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse quisquam minima autem blanditiis! Vero vel repellat, voluptatibus ea nostrum officia mollitia impedit ducimus eaque. Corporis eveniet necessitatibus id cum, vel beatae non eligendi doloremque quia omnis rerum quos laudantium deserunt, aut minima consequuntur eius nobis quisquam, similique consequatur quae atque? Ab deserunt enim voluptate laboriosam accusamus fugit laborum molestias tempora porro! Earum iusto, amet deleniti enim sunt culpa ab, sapiente assumenda quia, aperiam quidem labore quis? Placeat assumenda facere fugiat enim et qui possimus molestiae obcaecati minus ipsam dignissimos quia illo asperiores expedita, quisquam quo amet labore! Explicabo, ducimus suscipit! Molestias corporis reprehenderit odio dicta aut, distinctio fugiat illo. Adipisci eum beatae error, sed dolor velit sit omnis nesciunt ipsam tempora delectus, animi doloribus repellat earum aliquam? Numquam consequatur officia hic error, ipsa nobis reprehenderit molestias, ab eligendi cumque optio, ad harum. Aut autem aperiam magnam optio rerum, consequatur praesentium accusamus quasi pariatur hic consectetur accusantium saepe, enim, alias tempore. Ab nostrum tempore ea laudantium voluptates sequi. Vitae labore ab blanditiis nisi, distinctio obcaecati odit corporis eveniet velit quis eligendi ex pariatur non, sit nam laboriosam placeat. Harum ducimus, impedit amet ipsum laudantium ex aliquid provident vero quae? Quis cupiditate commodi nam vel voluptatem. Culpa natus assumenda, quae aut autem esse odit dolorem, explicabo placeat harum at fugit sit? Provident laudantium atque velit! Ullam esse amet optio perferendis dolor quod, possimus libero rerum, quasi accusamus quisquam recusandae iure. Deleniti autem facere earum ullam sunt numquam fugit qui doloremque suscipit eveniet. Optio magnam expedita, doloribus, obcaecati labore voluptas rem animi distinctio, numquam repudiandae officia doloremque. Libero quas possimus incidunt exercitationem quibusdam quisquam, autem reprehenderit pariatur placeat beatae eligendi commodi debitis asperiores similique, mollitia, eaque consequatur tenetur illo minus vitae impedit nobis ullam sint. Temporibus, nemo suscipit! Repellat, voluptatum nihil deserunt odio quisquam officia, magnam iure libero ipsam doloribus repellendus cupiditate amet ea natus dolorem ut debitis. Facere, tempore? Illum eligendi dolores quia inventore iste? Nemo quas ducimus, explicabo modi praesentium deleniti nam accusantium autem similique? Dicta odit labore provident modi sint minima dolore recusandae sit maxime nisi in perspiciatis, voluptatibus dolorem dolores non ullam officia corrupti nam doloremque sed nulla ipsa reprehenderit! Alias repellendus ipsam consectetur, corporis quasi libero ut natus maiores rem quam? Sequi, repudiandae nulla sint vel minima veritatis in voluptatibus eum atque, est incidunt animi tempora pariatur amet laudantium sunt ea deserunt aut excepturi! Laborum harum accusantium tenetur inventore deserunt! Nulla suscipit veniam provident quo explicabo necessitatibus assumenda corporis reiciendis natus obcaecati. Minima laudantium culpa molestiae sit illum quos quisquam ipsam amet voluptates dolores quidem, tenetur ad deleniti, quo voluptatem! Repellat suscipit harum eum necessitatibus at blanditiis saepe doloremque soluta consectetur minus nesciunt accusantium itaque cumque modi quidem, amet provident ea, ab illum nobis beatae pariatur voluptatum delectus ex? Magni, accusamus doloremque culpa quasi iure iusto ratione ducimus, aut, magnam fugiat ad tenetur dolorem quas molestiae illo quo rerum quam neque facilis. Odit aut nulla, quod consequatur nemo voluptatem beatae suscipit, iure laboriosam, et necessitatibus cupiditate vel aspernatur.
  </article>  
</div>

<!-- status elements -->
<div class="scroller-status">
  <div class="infinite-scroll-request loader-ellips">
    ...
  </div>
  <p class="infinite-scroll-last">End of content</p>
  <p class="infinite-scroll-error">No more pages to load</p>
</div>

<!-- pagination has path -->
<p class="pagination">
  <a class="pagination__next" href="my-page-2.php">Next page</a>
</p>



<script src="https://unpkg.com/infinite-scroll@3/dist/infinite-scroll.pkgd.min.js"></script>

<script>
var nextPenSlugs = [
  'page-2.php',
  'page-3.php',
  'monsoons-in-goa-4.php',
];

function getPenPath() {
  var slug = nextPenSlugs[ this.loadCount ];
  if ( slug ) {
    return slug;
  }
}
   var elem = document.querySelector('.article-feed');
var infScroll = new InfiniteScroll( elem, {
  // options
  path: getPenPath,
  append: '.article'
});
// infScroll.on( 'append', function( response, path, items ) {
//   console.log(path);
//   console.log(items);
// });
infScroll.on( 'history', function( title, path ) {
  console.log(title);
});




</script>
</body>
</html>