from vaderSentiment.vaderSentiment import SentimentIntensityAnalyzer
analyzer = SentimentIntensityAnalyzer()
list = []
for(i = 0; i < len(sys.argv); i++):
    list[i] = analyzer.polarity_scores(sys.argv[i])
return analyzer.polarity_scores(sys.argv)
