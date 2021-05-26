from spleeter.separator import Separator
import sys

# separator = Separator('spleeter:' + sys.argv[1:][0])
# separator.separate_to_file(sys.argv[2:][0], './')

separator = Separator('spleeter:2stems')
separator.separate_to_file('/opt/lampp/htdocs/IS207-Web-Dev-Application/Spleeter/XTC(Xích Thêm Chút)Remix - RPT Groovie Ft TLinh X RPT MCK.mp3', './')