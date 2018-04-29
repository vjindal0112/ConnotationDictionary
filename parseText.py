from vaderSentiment.vaderSentiment import SentimentIntensityAnalyzer
analyzer = SentimentIntensityAnalyzer()
list = []
for(int i = 0; i < len(sys.argv); i++):
    list[i] = analyzer.polarity_scores(sys.argv[i])
return list
