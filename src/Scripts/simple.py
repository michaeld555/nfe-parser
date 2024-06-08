from brazilfiscalreport.danfe import Danfe
import sys

args = sys.argv[1:]

input_file = args[0]
output_file = args[1]

# Path to the XML file
xml_file_path = input_file

# Load XML Content
with open(xml_file_path, "r", encoding="utf8") as file:
    xml_content = file.read()

# Instantiate the DANFE object with the loaded XML content
danfe = Danfe(xml=xml_content)

# Save the generated PDF to a file
danfe.output(output_file)