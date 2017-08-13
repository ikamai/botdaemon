for (( ; ; ))
do
  d=`curl -s 'http://search.twitter.com/search.json?q=nytimes&rpp=50&include_entities=true' | ./bin/jq '[.errors[] | {message}]'`
  echo $d

  echo "Daemon is running"
  sleep 5
done
