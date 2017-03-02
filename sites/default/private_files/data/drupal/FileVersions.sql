--ACCESS=access administration pages
SELECT fid, fname, version, date FROM {filedepot_fileversions} 
  WHERE status=1 order by date