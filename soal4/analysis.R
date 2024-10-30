library(ggplot2)
library(dplyr)

employee_data <- read.csv("/Users/rifqiagniamubarok/TUGAS/chart-laravel/chart-laravel/soal4/HR-Employee-Attrition.csv")

#Job satisfaction
job_satisfaction_summary <- employee_data %>%
  group_by(JobSatisfaction, Attrition) %>%
  summarise(Count = n())

ggplot(job_satisfaction_summary, aes(x = JobSatisfaction, y = Count, fill = Attrition)) +
  geom_bar(stat = "identity", position = "dodge") +
  labs(title = "Job Satisfaction vs Attrition", x = "Job Satisfaction", y = "Count") +
  scale_x_continuous(breaks = 1:4, labels = c("Low", "Medium", "High", "Very High"))

# Work Life Balance
work_life_balance_summary <- employee_data %>%
  group_by(WorkLifeBalance, Attrition) %>%
  summarise(Count = n())

ggplot(work_life_balance_summary, aes(x = WorkLifeBalance, y = Count, fill = Attrition)) +
  geom_bar(stat = "identity", position = "dodge") +
  labs(title = "Work Life Balance vs Attrition", x = "Work Life Balance", y = "Count") +
  scale_x_continuous(breaks = 1:4, labels = c("Bad", "Good", "Better", "Best"))