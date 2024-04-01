<?php 
include_once 'atas.php';

// Daftar URL gambar
$gambar_urls = [
    "https://cdn11.bigcommerce.com/s-9yct61arm5/images/stencil/1280x1280/products/265829/263650/0rrugo8l_the-dark-knight_1456344673__23692.1674080868.jpg?c=1",
    "https://www.movieposters.com/cdn/shop/products/d3401e97e249c56ed1c11a13dd02b47f_480x.progressive.jpg?v=1573652550",
    "https://m.media-amazon.com/images/I/A1exRxgHRRL._AC_SY879_.jpg",
    "https://i.ebayimg.com/images/g/EBEAAOSwHh1fjIh~/s-l960.jpg",
    "https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/639e325e-f642-4b02-b7c1-ffa20d7ef2cd/d31tsnm-768a3f24-da5c-44d7-96eb-80917f15e325.png/v1/fit/w_828,h_1226,q_70,strp/the_dark_knight_rises___poster_by_newrandombell_d31tsnm-414w-2x.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9MTMzMyIsInBhdGgiOiJcL2ZcLzYzOWUzMjVlLWY2NDItNGIwMi1iN2MxLWZmYTIwZDdlZjJjZFwvZDMxdHNubS03NjhhM2YyNC1kYTVjLTQ0ZDctOTZlYi04MDkxN2YxNWUzMjUucG5nIiwid2lkdGgiOiI8PTkwMCJ9XV0sImF1ZCI6WyJ1cm46c2VydmljZTppbWFnZS5vcGVyYXRpb25zIl19.E1WEKaT5wp8Qo__GMkHk-u7iA25_Qc0ZzLp2Txy56e4",
    "https://upload.wikimedia.org/wikipedia/id/9/94/NarutoCoverTankobon1.jpg",
    "https://www.kba.one/files/images/20220130-1-a-658.jpg",
    "https://allhomeprints.com/cdn/shop/files/thedarkknight-1080px.jpg?v=1683377929&width=823",
    
];

?>

<!DOCTYPE HTML>
<html>
<head>
    <title>FOTOKU</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h1 {
            text-align: center;
        }

        .gallery {
            margin: 0 auto;
            width: 80%;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .gallery img {
            width: calc(25% - 20px);
            margin-bottom: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }
    </style>
</head>
<body>
<h1 align="center" id="atas">
    <marquee direction="right" scrolldelay="100">
        Welcome to My Gallery
    </marquee>
</h1>

<div class="gallery">
    <?php foreach ($gambar_urls as $url) { ?>
        <img src="<?php echo $url; ?>" alt="Naruto Image" />
    <?php } ?>
</div>

</body>
</html>

<?php 
include_once 'bawah.php';
?>
