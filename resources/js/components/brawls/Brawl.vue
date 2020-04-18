<template>
  <div>
    <brawl-color-selected  
        :brawls="brawls"
        :showModal="showModal"
    >
    </brawl-color-selected>
    <!-- <brawl-color-selected 
        v-for="(brawl, id) in brawls"
        :key="id"
        :brawl="brawl"
      >
    </brawl-color-selected> -->
    <ul style="list-style: none;" @click="openModal" data-toggle="modal" data-target="#exampleModal">
      <li class="brawlColor" :style="{background: this.$store.state.color}">
        {{this.$store.state.color}}
      </li>
    </ul>
  </div>
</template>

<script>
  export default {
    data() {
      return {
        brawls: [],
        showModal: false,
      }
    },

    created() {
      this.getBrawls();
    },

    methods: {
      getBrawls() {
        axios.get('/brawl').then(res => {
          this.brawls = res.data.data;
        })
      },
      openModal() {
        this.showModal = true;
      }
    },
  }
</script>

<style lang="scss" scoped>

</style>