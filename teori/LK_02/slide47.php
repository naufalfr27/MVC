<!DOCTYPE html>
<html><body>
    <?php 
    //slide 47
    /* Di sisi server, dua variabel $var1 dan $var2 didefinisikan dengan nilai 10 dan 20, 
    kemudian dikalikan, dan hasilnya ditampilkan menggunakan echo, dengan output berupa "Sever output: 200". */
    $var1 = 10;
    $var2 = 20;
    echo "Sever output: ", $var1 * $var2;
    ?>
    <!-- Di sisi klien, JavaScript digunakan untuk mendefinisikan dua variabel var1 dan var2 dengan nilai 10 dan 30,  
          lalu hasil perkalian mereka ditampilkan sebagai teks dalam elemen <div> dengan id client. 
          Output "Client output: 300" akan terlihat di halaman web di bagian elemen tersebut. -->
    <div id="client"></div>
    <script>
        var var1 = 10;
        var var2 = 30;
        var hasil = "Client output: " + var1 * var2;
        document.querySelector("#client").innerHTML = hasil;
    </script>
</body></html>