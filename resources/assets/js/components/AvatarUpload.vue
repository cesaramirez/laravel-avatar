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
import upload from '../mixins/upload'

export default {
  props: [
    'currentAvatar'
  ],
  mixins: [
    upload
  ],
  data() {
      return {
        errors: [],
        avatar: {
          id: null,
          path: this.currentAvatar
        }
      }
  },
  methods: {
      fileChange(e) {
        this.upload(e)
      }
  }
}
</script>
