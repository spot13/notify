
// Provide a default path to dwr.engine
if (dwr == null) var dwr = {};
if (dwr.engine == null) dwr.engine = {};
if (DWREngine == null) var DWREngine = dwr.engine;

if (ContentletAjax == null) var ContentletAjax = {};
ContentletAjax._path = '/dwr';
ContentletAjax.getContentletData = function(p0, callback) {
  dwr.engine._execute(ContentletAjax._path, 'ContentletAjax', 'getContentletData', p0, callback);
}
ContentletAjax.searchContentlet = function(p0, p1, p2, p3, p4, p5, p6, callback) {
  dwr.engine._execute(ContentletAjax._path, 'ContentletAjax', 'searchContentlet', p0, p1, p2, p3, p4, p5, p6, callback);
}
ContentletAjax.searchContentlets = function(p0, p1, p2, p3, p4, p5, callback) {
  dwr.engine._execute(ContentletAjax._path, 'ContentletAjax', 'searchContentlets', p0, p1, p2, p3, p4, p5, callback);
}
ContentletAjax.searchContentletsByUser = function(p0, p1, p2, p3, p4, p5, p6, callback) {
  dwr.engine._execute(ContentletAjax._path, 'ContentletAjax', 'searchContentletsByUser', p0, p1, p2, p3, p4, p5, p6, false, callback);
}
ContentletAjax.searchContentletsByUser = function(p0, p1, p2, p3, p4, p5, p6, p7, callback) {
  dwr.engine._execute(ContentletAjax._path, 'ContentletAjax', 'searchContentletsByUser', p0, p1, p2, p3, p4, p5, p6, p7, false, callback);
}
ContentletAjax.doSearchGlossaryTerm = function(p0, p1, callback) {
  dwr.engine._execute(ContentletAjax._path, 'ContentletAjax', 'doSearchGlossaryTerm', p0, p1, callback);
}
ContentletAjax.publishContentlets = function(p0, p1, p2, callback) {
  dwr.engine._execute(ContentletAjax._path, 'ContentletAjax', 'publishContentlets', p0, p1, p2, callback);
}
