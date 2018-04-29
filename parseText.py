from vaderSentiment.vaderSentiment import SentimentIntensityAnalyzer
import sys
analyzer = SentimentIntensityAnalyzer()
list = []
for x in range(1, len(sys.argv)):
    out = analyzer.polarity_scores(sys.argv[x])
    print(out["compound"])
