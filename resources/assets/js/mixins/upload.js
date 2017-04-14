export default {
  props: {
      endpoint: {
          type: String
      },
      sendAs: {
          type: String,
          default: 'file'
      }
  },
  data() {
    return {
        uploading: true
    }      
  },
  methods: {
      upload(e) {
        console.log(e);
      }
  }
}
