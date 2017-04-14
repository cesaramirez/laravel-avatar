<template lang="html">
    <div>
        <div class="form-group">
            <label for="avatar">Avatar</label>
            <input type="file" @change="fileChange">
            <div class="help-block">
                Help
            </div>
        </div>
        <div>
            <input type="hidden" name="avatar_id">
            <img alt="Current Avatar" class="avatar">
        </div>
    </div>
</template>

<script>
export default {
  methods: {
      fileChange(e) {
        console.log(e);
      }
  }
}
</script>
