/**
 * @license Copyright (c) 2003-2023, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see https://ckeditor.com/legal/ckeditor-oss-license
 */

CKEDITOR.editorConfig = function (config) {
    // Nonaktifkan notifikasi keamanan
    config.removePlugins = 'a11ychecker,notificationupdate';
};

CKEDITOR.replace('editor', {
    removePlugins: 'a11ychecker,notificationupdate'
});
