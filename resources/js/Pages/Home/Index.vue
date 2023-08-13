<template>
  <AppLayouts>
    <template #content>
      <br><center><h1 style="color: #4c53af;">Student Information</h1></center>
      <br>
      <div class="student-blog">
        <div v-for="student in filteredStudents" :key="student.id" class="student-card">
          <img :src="student.avatar" alt="Student Avatar" class="student-avatar" />
          <div class="student-info">
            <h2 class="student-name">{{ student.name }}</h2>
            <p class="student-description">{{ student.age }}</p>
          </div>
        </div>
      </div>
    </template>
  </AppLayouts>
</template>

<script>
import AppLayouts from '@/Layouts/App.vue';

export default {
  components: {
    AppLayouts
  },
  props: {
    stuInfo: Array 
  },
  computed: {
    filteredStudents() {
      // Filter students with status zero
      return this.stuInfo.filter(student => student.status == 1);
    }
  }
};
</script>





<style scoped>
.student-blog {
  display: flex;
  flex-wrap: wrap;
  gap: 20px;
}

.student-card {
  border: 1px solid #ccc;
  padding: 20px;
  border-radius: 5px;
  display: flex;
  flex-direction: column;
}

.student-avatar {
  max-width: 100px;
  max-height: 100px;
  border-radius: 50%;
  margin-bottom: 10px;
}

.student-name {
  font-size: 1.2rem;
  margin-bottom: 5px;
}

.student-description {
  font-size: 1rem;
  color: #555;
}
</style>
