<?php
// Check if the user has visited the website before
if (isset($_COOKIE['visited'])) {
    // Set a cookie to track that the user has visited the website
    // setcookie('visited', 'true', time() + (86400 * 30), "/"); // Cookie set to expire in 30 days
    
    // Embed the YouTube video
    echo '<div style="position: fixed; bottom: 20px; right: 20px; width: 300px; height: 200px; background-color: #f0f0f0; border: 1px solid #ccc; padding: 10px;">';
    echo '<iframe width="100%" height="100%" src="https://www.youtube.com/embed/nmXP-eyZqa8?si=G2ANN434uhpnx7JR" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>';
    echo '</div>';
}
?>
