<!DOCTYPE html>
<html lang="en">

    <x-head />

    <body class="custom-cursor">
        <div class="custom-cursor__cursor"></div>
        <div class="custom-cursor__cursor-two"></div>

        <div class="page-wrapper">

            <x-headerStyleTwoOnepage />


            @yield('content')

            <x-mobileMenu />
            <x-searchPopup />
            <x-scroll-to-top />

            <x-loader />

            <x-scripts />

    </body>

</html>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-75JTJ4Q277"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-75JTJ4Q277');
</script>
<script>
    function sendToWhatsApp(event) {
        event.preventDefault();

        const name = document.getElementById("name").value;
        const email = document.getElementById("email").value;
        const phone = document.getElementById("phone").value;
        const subject = document.getElementById("subject").value;
        const message = document.getElementById("message").value;

        const waNumber = "6285889963822"; // nomor tujuan (format internasional tanpa +)
        const text = `Halo, saya ${name}%0AEmail: ${email}%0ATelepon: ${phone}%0ASubject: ${subject}%0APesan: ${message}. Dapat info dari anugrahdigital.co.id dan ingin nanya-nanya seputar layanan yang ada di web tsb.`;

        window.open(`https://wa.me/${waNumber}?text=${text}`, "_blank");
    }
</script>
