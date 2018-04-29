from vaderSentiment.vaderSentiment import SentimentIntensityAnalyzer
analyzer = SentimentIntensityAnalyzer()
vs = analyzer.polarity_scores("this is a really bad example")
print(str(vs))
print(str(vs["compound"]))
