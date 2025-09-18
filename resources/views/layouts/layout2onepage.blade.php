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
<script async src="https://www.googletagmanager.com/gtag/js?id=G-74KHTS4R1L"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-74KHTS4R1L');
</script>
<!-- Event snippet for Kontak conversion page -->
<script>
  gtag('event', 'conversion', {'send_to': 'AW-454861025/Idy2CP_kmuUZEOHB8tgB'});
</script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/68c7b1ddebe9761929d3e53c/1j560tirh';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
})();
</script>
<script>
fetch("https://ipapi.co/json/")
  .then(res => res.json())
  .then(data => {
    if (data.country_code !== "ID" && !window.location.pathname.startsWith("/en")) {
      window.location.href = "/en";
    }
  });
</script>
<!--End of Tawk.to Script-->
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
