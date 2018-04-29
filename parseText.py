#!/usr/bin/env python

from vaderSentiment.vaderSentiment import SentimentIntensityAnalyzer
# import sys
# import urllib2
analyzer = SentimentIntensityAnalyzer()
list = []
# for x in range(1, len(sys.argv)):
    # list.append(analyzer.polarity_scores(sys.argv[x])["compound"])
print(analyzer.polarity_scores(sys.argv[1])["compound"])
# req = urllib2.Request(url='https://connotationdictionary.herokuapp.com/scraper.php?nums=%s' % list)
# f = urllib2.urlopen(req)
# print f.read()
