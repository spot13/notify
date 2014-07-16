
// Provide a default path to dwr.engine
if (dwr == null) var dwr = {};
if (dwr.engine == null) dwr.engine = {};
if (DWREngine == null) var DWREngine = dwr.engine;

if (StructureAjax == null) var StructureAjax = {};
StructureAjax._path = '/dwr';
StructureAjax.getCategoryAPI = function(callback) {
  dwr.engine._execute(StructureAjax._path, 'StructureAjax', 'getCategoryAPI', callback);
}
StructureAjax.setCategoryAPI = function(p0, callback) {
  dwr.engine._execute(StructureAjax._path, 'StructureAjax', 'setCategoryAPI', p0, callback);
}
StructureAjax.getStructureSearchFields = function(p0, callback) {
  dwr.engine._execute(StructureAjax._path, 'StructureAjax', 'getStructureSearchFields', p0, callback);
}
StructureAjax.getWidgets = function(callback) {
  dwr.engine._execute(StructureAjax._path, 'StructureAjax', 'getWidgets', callback);
}
StructureAjax.getStructureFields = function(p0, callback) {
  dwr.engine._execute(StructureAjax._path, 'StructureAjax', 'getStructureFields', p0, callback);
}
StructureAjax.getSearchableStructureFields = function(p0, callback) {
  dwr.engine._execute(StructureAjax._path, 'StructureAjax', 'getSearchableStructureFields', p0, callback);
}
StructureAjax.getKeyStructureFields = function(p0, callback) {
  dwr.engine._execute(StructureAjax._path, 'StructureAjax', 'getKeyStructureFields', p0, callback);
}
StructureAjax.getStructureCategories = function(p0, callback) {
  dwr.engine._execute(StructureAjax._path, 'StructureAjax', 'getStructureCategories', p0, callback);
}
StructureAjax.getCategoriesTree = function(p0, p1, callback) {
  dwr.engine._execute(StructureAjax._path, 'StructureAjax', 'getCategoriesTree', p0, p1, callback);
}
StructureAjax.getDropDownList = function(p0, callback) {
  dwr.engine._execute(StructureAjax._path, 'StructureAjax', 'getDropDownList', p0, callback);
}
StructureAjax.getDropDownOptions = function(p0, callback) {
  dwr.engine._execute(StructureAjax._path, 'StructureAjax', 'getDropDownOptions', p0, callback);
}
StructureAjax.getRadioButtons = function(p0, callback) {
  dwr.engine._execute(StructureAjax._path, 'StructureAjax', 'getRadioButtons', p0, callback);
}
StructureAjax.getCheckboxes = function(p0, callback) {
  dwr.engine._execute(StructureAjax._path, 'StructureAjax', 'getCheckboxes', p0, callback);
}
StructureAjax.reorderfields = function(p0, p1, callback) {
  dwr.engine._execute(StructureAjax._path, 'StructureAjax', 'reorderfields', p0, p1, callback);
}
