<template>
<Scene v-model="myScene">
  <Property name="clearColor" color="#FFF"></Property>
  <Camera type="acrRotate"></Camera>
  <!-- <HemisphericLight diffuse="#0000FF"></HemisphericLight> -->
  <Entity :position="[0, 0, 0]">
    <Animation property="rotation.x" :duration="50">
      <Key frame="0%" :value="0"></Key>
      <Key frame="100%" :value="Math.PI * 2"></Key>
    </Animation>
    <!-- <Animation property="rotation.y" :duration="5" :end="Math.PI * 2"></Animation> -->
    <!-- <Animation property="rotation.z" :duration="5" :end="Math.PI * 2"></Animation> -->
    <PointLight diffuse="#FF0000"></PointLight>
    <Box v-for="(position, key) in boxes" :key="key" :position="position"></Box>
  </Entity>
</Scene>
</template>

<script>
const BOXES = [
  [0, 0, 4],
  [0, 0, -4],
  [0, 4, 0],
  [0, -4, 0],
  [0, 4, 4],
  [0, 4, -4],
  [0, -4, 4],
  [0, -4, -4],
  [4, 0, 0],
  [-4, 0, 0],
  [4, 0, 4],
  [4, 0, -4],
  [-4, 0, 4],
  [-4, 0, -4],
  [4, 4, 0],
  [4, -4, 0],
  [-4, 4, 0],
  [-4, -4, 0],
  [4, 4, 4],
  [4, 4, -4],
  [4, -4, 4],
  [4, -4, -4],
  [-4, 4, 4],
  [-4, 4, -4],
  [-4, -4, 4],
  [-4, -4, -4],
];

export default {
  computed: {
    boxes() {
      return BOXES;
    },
  },
};
</script>