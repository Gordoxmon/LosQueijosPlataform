<?php
?>
<style>
    .h1{
        transition-property: all;
        transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
        transition-duration: 150ms;
    }
</style>
<div class="container">
    <div class="row">
        <div class="col-12 d-flex justify-content-center align-items-center">
            <span class="h1 text-capitalize">
                <?= 'hviuodefrhoivuredh' ?>
            </span>
        </div>
    </div>
</div>

<script>
    const rontate = async (i)=> {

            await new Promise(resolve => setTimeout(resolve, 1));
            $('.h1').css('transform', 'rotate('+10*i+'deg)');

    }
    $(document).ready(async () => {
        i=1;
        while (i>0) {
            i=i*i;
            await rontate(i);
        }   });
</script>
