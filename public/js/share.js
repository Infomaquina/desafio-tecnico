$(()=>{
  const shareData = {
    title: "Sanitrex",
    text: "Compartilhe nosso App",
    url: "https://sanitrex.brandev.tech",
  };

  const btn = document.querySelector("#share");

  // Share must be triggered by "user activation"
  btn.addEventListener("click", async () => {
    try {
      await navigator.share(shareData);
    } catch (err) {
      console.log(`Error: ${err}`);
    }
  });
})