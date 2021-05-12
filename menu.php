<style>
.nav-item {
    font-size: 20px;
    font-family: sans-serif;
}
</style>

<?php
// pagina atual
$cp = $currentPage;
?>

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">
            <img src="imgs-proj/image/logo_web.svg" height="60px" class="d-inline-block" alt=""></a>
        <button class="navbar-toggler float-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" style="font-family: 'Goldman', cursive; color: white;" href="index.php">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="font-family: 'Goldman', cursive; color: white;" href="team.php">Team</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="font-family: 'Goldman', cursive; color: white;" href="car-page.php">Car</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="font-family: 'Goldman', cursive; color: white;" href="season.php">Season</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="font-family: 'Goldman', cursive; color: white;" href="partners.php">Partners</a>
                </li>
            </ul>
        </div>
    </nav>