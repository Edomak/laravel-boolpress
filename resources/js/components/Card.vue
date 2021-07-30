<template>
  <div class="col-4 my-3 d-flex">
        <div class="card w-100">
            <div class="card-body">
                <h4 class="card-title">{{ item.title }}</h4>
                <p>{{ item.excerpt }}</p>
                <a href="#" class="card-link">Leggi</a>
            </div>
        </div>       
    </div>
</template>

<script>
export default {
    name: 'Card',
    props: { 'item' : Object }
}
</script>

<style lang="scss"> 
   
</style>
