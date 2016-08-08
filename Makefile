
build: clean lint copy tar

lint:
	vendor/bin/phpcs --standard=./ruleset.xml .

clean:
	rm -rf dist dist.tar.gz

copy:
	mkdir dist
	cp app dist
	cp index.php dist
	cp composer.json dist

tar:
	tar -zc dist/ | gzip > dist.tar.gz
	
.PHONY: build
