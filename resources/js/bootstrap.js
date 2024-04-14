import axios from 'axios';
import ClassicEditor from '@ckeditor/ckeditor5-build-classic';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
window.ClassicEditor = ClassicEditor;