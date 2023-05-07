<style>
    .marquee {
  height: 25px;
  width: 100%;
  margin: 100px;
  /* overflow: hidden; */
  position: relative;
}

.marquee div {
  display: block;
  width: 200%;
  height: 100px;

  position: absolute;
  overflow: hidden;

  animation: marquee 10s linear infinite;
}

.marquee span {
  float: left;
  width: 100%;
  font-size:30px;
  color:blue;
}

@keyframes marquee {
  0% { left: 100%; }
  100% { left: -100%; }
}
</style>
<div class="marquee container-fluid">
  <div>
    <span>
    <img width="100" height="50" src="../../Assets/back/images/logocopy.png" alt=""> &nbsp; Welcome to Công ty TNHH BLUSZA &nbsp; <img width="100" height="50" src="../../Assets/back/images/logocopy.png" alt="">
    </span>
  </div>
</div>
